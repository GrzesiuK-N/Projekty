using system;

interface IAnimal 
{
  void animalSound(); 
}

class Mouse : IAnimal 
{
  public void animalSound() 
  {
    Console.WriteLine("Pi pi");
  }
}



