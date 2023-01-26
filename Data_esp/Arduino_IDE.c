#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include <WiFiClientSecure.h>


// Define Wifi SSID and PASS
const char* ssid = "skidi kat kat";
const char* pass = "retardsprosty";
WiFiClient wifi;

//PIR Sensor
int sensor = D3;  
int val = 0;
int temp = 0;
int led_buzzer = D4;
int state1 = LOW;
int state2 = LOW;
int state3 = LOW;
const int BUTTON = D5;
int BUTTONstate = 0;
//END

// setup - vykonava sa len raz pri sputeni programu
// pokusi sa pripojit k wifi
void setup()
{
  pinMode(BUTTON, INPUT);
  pinMode(led_buzzer, OUTPUT);      // initalize LED as an output
  pinMode(sensor, INPUT);    // initialize sensor as an input
  Serial.begin(9600);
  WiFi.begin(ssid, pass);
  Serial.println("Connecting");

  while (WiFi.status() != WL_CONNECTED)
  {
    delay (1000);
    Serial.print(".");
  }

  Serial.println("Connected");
}

// vykonava sa dookola
void loop()
{

// Váš kód ...
  val = digitalRead(sensor);
  int value = analogRead(A0);
  BUTTONstate = digitalRead(BUTTON);
  
  Serial.println("Analog value : ");
  Serial.println(value);
  Serial.println(BUTTONstate);  // read sensor value
  
  if (val == HIGH)           // check if the sensor is HIGH 
    state1 = HIGH;       // update variable state to HIGH

  if(value<130)
    state2 = HIGH;
  //if(value>20)
  //  state3 = HIGH;

  if(BUTTONstate == 0){
    if(state1 == HIGH){
      digitalWrite(led_buzzer, HIGH);   // turn LED ON 
      Serial.println("Motion detected!");
    }
    
    else if(state2 == HIGH){
      digitalWrite(led_buzzer, HIGH);
      delay(1000);
      digitalWrite(led_buzzer, LOW);
      delay(1000);
      digitalWrite(led_buzzer, HIGH);
      delay(1000);
      digitalWrite(led_buzzer, LOW);
      delay(1000);
      Serial.println("Light detected!");
    }
    
    else if(state3 == HIGH){
      digitalWrite(led_buzzer, HIGH);
      delay(500);
      digitalWrite(led_buzzer, LOW);
      delay(500);
      digitalWrite(led_buzzer, HIGH);
      delay(500);
      digitalWrite(led_buzzer, LOW);
      delay(500);
      digitalWrite(led_buzzer, HIGH);
      delay(500);
      digitalWrite(led_buzzer, LOW);
      delay(500);
      Serial.println("Fire detected!");
    }

  }

  else{
    state1 = LOW;
    state2 = LOW;
    state3 = LOW;
    Serial.println("Everything okay!");
    digitalWrite(led_buzzer, LOW);
    temp = 0;    
  }  

  // ZAPIS DAT NA WEB
  if(temp == 0 && (state1 == HIGH || state2 == HIGH || state3 == HIGH)){  
    if (WiFi.status() == WL_CONNECTED) 
    {
      HTTPClient http;
      WiFiClientSecure client;
      client.setInsecure();
      String server_name = "https://filipszeman.azurewebsites.net/?"; // nazov vasho webu a web stranky, ktoru chcete nacitat
      server_name += "a="; // nazov premennej na webe
      server_name += state1; // hodnota premmenej
      server_name += "&b="; // nazov premennej na webe
      server_name += state2; // hodnota premmenej
      server_name += "&c="; // nazov premennej na webe
      server_name += state3; // hodnota premmenej
      http.begin(client,server_name);
      int httpCode = http.GET(); // http code

      if (httpCode>0) 
      {
        Serial.print("HTTP Response code: ");
        Serial.println(httpCode); // vypisanie http code do Serial monitoru (200 - OK)
        temp=1;
      }
      http.end(); 
    }
  }
}