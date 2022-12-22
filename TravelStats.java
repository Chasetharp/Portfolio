import java.util.Scanner;
/**
 *
 *Program takes user input and allows them to select a country,
 * user is then able to learn more about the country, or switch to a currency
 * converter to convert from USD to the selected country, user is also able
 * to see a list of search results for currency conversions
 *
 *Title: Travel Stats
 *@author Andres Zamora
 *@author Chase Tharp
 *
*/
public class TravelStats {

   public static void main(String[] args) { 
   
   Scanner scnr = new Scanner(System.in);
   char input;
   boolean keepAlive = true;
   Menu output = new Menu();
   Currency list = new Currency();
   int countrySet;
   String countrySelect;

   
   output.countryList();
   countrySet = scnr.nextInt();
   
   //while loop to output menu and error trap selections
   while(keepAlive){
      //while loop to capture incorrect selections for country
      while((countrySet < 0) || (countrySet > 7)){
         System.out.println("Enter valid number:");
         output.countryList();
         countrySet = scnr.nextInt();
      }
   
      Country country = new Country(countrySet);
      countrySelect = country.getCountry();
    
      if(countrySet >= 1 && countrySet <= 7){
         output.countryOptions(countrySelect);
      }
   
      input = scnr.next().charAt(0);
   
      //switch statement for user input selections
      switch(input){
         case 'u': System.out.println(country.getBio());
                   break;
         case 'x': System.out.println(country.getSights());
                   break;
         case 'z': System.out.println(country.getTransport());
                   break;
         case 't': System.out.println("Enter an amount in USD to convert:");
                   double amount = scnr.nextInt();
                   list.Currency(countrySelect, amount);
                   System.out.println(list.getCurrency());
                   break;
         case 'y': list.getResults();
                   break;
         case 'd': output.countryList();
                   countrySet = scnr.nextInt();
                   Country country2 = new Country(countrySet);
                   countrySelect = country.getCountry();
                   break;
         case 'q': System.out.println("Exiting.."); 
                   keepAlive = false;
                   System.exit(0);
                   break;
         default:  System.out.println("Enter valid menu option:");
                   break;
      }
   
    }

  }   
}