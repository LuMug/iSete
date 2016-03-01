#include <SPI.h>
#include <SD.h>
 
File myFile;
 
void setup()
{
  if (!SD.begin(4)) { 
  return; }
  Serial.begin(9600);
}
 
void loop()
{
  myFile = SD.open("prova.txt",FILE_WRITE);
  if (myFile != false)
    myFile.println("Ciao Mondo");
    
  myFile.close();
  
  myFile = SD.open("prova.txt",FILE_READ);
  if(myFile==true){
    while(myFile.available()){
        Serial.write(myFile.read());
    }
  }

  myFile.close();
}
