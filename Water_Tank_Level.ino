#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include <ArduinoJson.h>  
#include <NewPing.h> //Library untuk HC-SR04
#define TRIGGER_PIN  D5  //Pin Trigger HC-SR04 pada NodeMCU
#define ECHO_PIN     D6  //Pin Echo HC-SR04 pada NodeMCU
#define MAX_DISTANCE 250 //Maksimum Pembacaan Jarak (cm)
#define pinCH_1 D1

const char* ssid = "KILLUA"; //masukkan ssid
const char* password = "nada124@"; //masukkan password     

int state;
NewPing sonar(TRIGGER_PIN, ECHO_PIN, MAX_DISTANCE); //Setup Pin HC-SR04 dan Jarak Pembacaan dengan Fungsi Library
void setup () {
  Serial.begin(115200);
  pinMode(pinCH_1, OUTPUT);
  WiFi.begin(ssid, password);

  while (WiFi.status() != WL_CONNECTED) {
    delay(1000);
    Serial.println("Menghubungkan");
  }

  if(WiFi.status() == WL_CONNECTED){
    Serial.println("Terhubung");
  }
  else{
    Serial.println("Gagal Terhubung");
  }
}

void loop() {
  int jarak = sonar.ping_cm(); //Melakukan Pembacaan Jarak dalam bentuk cm
  if (WiFi.status() == WL_CONNECTED) {
    HTTPClient http;
    HTTPClient http1;
    http.begin("http://192.168.1.7/air/data-api.php?nilai=" + String(jarak));
    http1.begin("http://192.168.1.7/air/proses.php"); 
    int httpCode = http.GET();
    int httpCode1 = http1.GET();
    if (httpCode || httpCode1 > 0) {
      char json[500];
      String payload = http.getString();
      payload.toCharArray(json, 500);

      char json1[500];
      String payload1 = http1.getString();
      payload1.toCharArray(json1, 500);
      
      //StaticJsonDocument<200> doc;
      DynamicJsonDocument doc(JSON_OBJECT_SIZE(5));
      DynamicJsonDocument doc1(JSON_OBJECT_SIZE(5));

     // Deserialize the JSON document
      deserializeJson(doc, json);
      deserializeJson(doc1, json1); 
     
     String Jarak1  = doc["nilai"];
     int id         = doc1["id"];
     int CH_1       = doc1["CH_1"];
     
     Serial.println("Monitoring Ketinggian Air");
     Serial.print("Jarak : ");
     Serial.println(Jarak1);
     Serial.print("ID = ");
     Serial.println(id);
     Serial.print("Channel 1 = ");
     Serial.println(CH_1);
     Serial.println(" "); 

     if(30 < Jarak1.toInt() < 100 && CH_1 == 0){
      digitalWrite(pinCH_1, LOW);
      state = digitalRead(pinCH_1);
     }
     else if(30 < Jarak1.toInt() < 100 && CH_1 == 1){  
      digitalWrite(pinCH_1, HIGH);
      state = digitalRead(pinCH_1);
     }
      if(CH_1 == 0){
      digitalWrite(pinCH_1, LOW);
     }
     else{  
      digitalWrite(pinCH_1, HIGH);
     }
    }
    http.end();
    http1.end();
  }
  delay(3000);
}
