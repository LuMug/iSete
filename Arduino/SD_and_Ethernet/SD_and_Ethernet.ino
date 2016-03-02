// Basic Arduino Web Server version 0.1 modified to include logging
// http://startingelectronics.org/software/arduino/web-server/basic-01/
//
// More details and web files available from:
// http://startingelectronics.org/software/arduino/web-server/01-log-data/
//
// Date: 11 July 2015
//
#include <SPI.h>
#include <Ethernet.h>
#include <SD.h>




// pin used for Ethernet chip SPI chip select
#define PIN_ETH_SPI   10

long log_time_ms = 5000; // how often to log data in milliseconds
long prev_log_time = 0;   // previous time log occurred

// the media access control (ethernet hardware) address for the shield:
byte mac[] = { 
  0x90, 0xA2, 0xDA, 0x10, 0x25, 0xFE };
IPAddress ip(192, 168, 1, 249); // IP address, may need to change depending on network
// the router's gateway address:
EthernetServer server(80);
File webFile;
void setup() {
  // deselect Ethernet chip on SPI bus
  pinMode(PIN_ETH_SPI, OUTPUT);
  digitalWrite(PIN_ETH_SPI, HIGH);  
  Serial.begin(9600);       // for debugging  
  if (!SD.begin(4)) {
    return;  // SD card initialization failed
  }
  Ethernet.begin(mac, ip);
  server.begin();  // start listening for clients
}

void loop() {
  // if an incoming client connects, there will be bytes available to read:
  EthernetClient client = server.available();
  if (client) { // se connesso
    while (client.connected()) {
      webFile = SD.open("index.htm");        // open web page file
      if (webFile) {
        while(webFile.available()) {
          client.write(webFile.read()); // send web page to client
        }              
        webFile.close();
      }      
      break;
    }  // while (client.connected())
    delay(1);
    client.stop();
    // SD.remove("prova.txt"); 
  }  // if (client)
  else { // se non si connette
    webFile = SD.open("index.txt"); 
    // webFile.write("client non connesso");
    while(webFile.available()) {
      Serial.write(webFile.read()); // send web page to client
    }    
    Serial.println("finish");
    webFile.close();
    // log the data
  }
}// void loop()





