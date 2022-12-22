/**
 *
 *Contains menu methods to display menus for travelStats class
 * based on user input
 *
 *Title: Travel Stats Menu
 *@author Andres Zamora
 *@author Chase Tharp
 *
*/
public class Menu {

   public void countryList() {
      System.out.println(); 
      System.out.println("Select a Country:"); 
      System.out.println("1 - Thailand"); 
      System.out.println("2 - Japan"); 
      System.out.println("3 - Switzerland"); 
      System.out.println("4 - Mexico"); 
      System.out.println("5 - Austria"); 
      System.out.println("6 - Denmark");
      System.out.println("7 - United Kingdom");
      System.out.println("0 - Quit\n");
   }

   public void countryOptions(String country) {
      System.out.println(); 
      System.out.println("Select option to learn about " + country + ":");
      System.out.println("u - Bio"); 
      System.out.println("x - Sights"); 
      System.out.println("z - Transportation"); 
      System.out.println("t - Currency conversion"); 
      System.out.println("d - Change Country");
      System.out.println("y - See all currency results");
      System.out.println("q - Quit\n");  
   }

}