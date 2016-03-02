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

byte mac[] = { 0x90, 0xA2, 0xDA, 0x10, 0x25, 0xFE }; // the media access control (ethernet hardware) address for the shield:
IPAddress ip(192, 168, 1, 249); // IP address, may need to change depending on network
EthernetServer server(80);
File myFile; 

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
  if (client) { // se si connette
    myFile = SD.open("index.htm");        // open web page file
    if (myFile) {
      while(myFile.available()) {
        client.print(myFile.read()); // send web page to client
      }              
      myFile.close();
    }        // while (client.connected())
    delay(1);
  }  // if (client)
  else { // se non si connette
    myFile = SD.open("index.txt");     
    Serial.println("client non connesso");
    while(myFile.available()) {
      myFile.write("client non connesso"); // send web page to client
    }    
    Serial.println("finish");
    myFile.close();
    // log the data
  }
}// void loop()
