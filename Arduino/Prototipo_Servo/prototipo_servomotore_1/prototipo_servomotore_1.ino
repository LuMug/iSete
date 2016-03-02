// iSete progetto
//Esempio di codice preso da http://www.mauroalfieri.it/elettronica/tutorial-arduino-servo.html
 
#include <Servo.h> //questa e una libreria che uso per controllare il servo
 
Servo myservo;
 
void setup()
{
  myservo.attach(7);//pin dove è attaccato il servo
}
 
void loop()
{
  for(int pos = 0; pos < 360; pos += 1)//rotazione del servo
  {
    myservo.write(pos);
    delay(5);
  }
  for(int pos = 360; pos>=1; pos-=1)//rotazione del servo
  {
    myservo.write(pos);
    delay(5);
  }
}
