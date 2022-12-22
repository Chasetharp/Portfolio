import java.text.DecimalFormat;
import java.util.ArrayList;
/**
 *
 *Takes USD value from user and converts to selected currency. 
 * Stores currency value for user to display all searched results.
 *
 *Title: Travel Stats Currency
 *@author Andres Zamora
 *@author Chase Tharp
 *
*/
public class Currency {

   // private double input;
   private ArrayList<Double> result = new ArrayList<Double>();    
   private ArrayList<Double> amount = new ArrayList<Double>();
   private ArrayList<String> resultStr = new ArrayList<String>();
   private String total; 
   private DecimalFormat df = new DecimalFormat("0.00");
   private double[] countryCurrency = new double[7];

   public void Currency(String country, double amount){
      countryCurrency[0] = 146.62; //yen
      countryCurrency[1] = 37.29;  //baht
      countryCurrency[2] = 19.53;  //pesos
      countryCurrency[3] = 1.03;  //Euro
      countryCurrency[4] = 0.88; // pound
      countryCurrency[5] = 1.00; // Swiss Franc
      countryCurrency[6] = 7.20; // Danish Krone

      //loop to calculate value of currency
      for(int i=0; i < countryCurrency.length; ++i) {
         countryCurrency[i] = countryCurrency[i] * amount;                                  
      }
      
      //switch displays currency based on country name
      switch(country){
         case "Thailand": 
            total = "$" + df.format(amount) + " USD is " + df.format(countryCurrency[1]) + " THB";
            setResults(amount, countryCurrency[1], "THB");            
            break;
         case "Japan": 
            total = "$" + df.format(amount) + " USD is " + df.format(countryCurrency[0]) + " JPY";
            setResults(amount, countryCurrency[0], "JPY");
            break;
         case "Switzerland": 
            total = "$" + df.format(amount) + " USD is " + df.format(countryCurrency[5]) + " CHF";
            setResults(amount, countryCurrency[5], "CHF");
            break;
         case "Mexico":
            total = "$" + df.format(amount) + " USD is " + df.format(countryCurrency[2]) + " MXN";
            setResults(amount, countryCurrency[2], "MXN");
            break;
         case "Austria": 
            total = "$" + df.format(amount) + " USD is " + df.format(countryCurrency[3]) + " EUR";
            setResults(amount, countryCurrency[3], "EUR");
            break;
         case "Denmark":
            total = "$" + df.format(amount) + " USD is " + df.format(countryCurrency[6]) + " DKK";
            setResults(amount, countryCurrency[6], "DKK");
            break;
         case "United Kingdom": 
            total = "$" + df.format(amount) + " USD is " + df.format(countryCurrency[4]) + " GBP";
            setResults(amount, countryCurrency[4], "GBP");
         break;
      }
   }
   
   public String getCurrency(){
      return total;
   }
   
   //adding currency searches into array for user access
   public void setResults(double in, double currency, String name){
      result.add(currency);
      amount.add(in);
      resultStr.add(name);
   }
 
   //Displaying currency search results to user
   public void getResults(){
      System.out.println();
      for(int i = 0; i < result.size(); i++){
          System.out.println("$" + df.format(amount.get(i)) + " USD is " + df.format(result.get(i)) + " " + resultStr.get(i)); //nw added 2 decimal point and new array list
      } 
   } 
   
}