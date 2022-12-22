/**
 *
 *Sets and returns user-selected country from travelStats class,
 * returns stats about country as user requests them
 * 
 *
 *Title: Travel Stats Country
 *@author Andres Zamora
 *@author Chase Tharp
 *
*/
public class Country{

   private String countrySelect;
   private String bio;
   private String sights;
   private String transport;
   Menu output = new Menu();
   
   
   //Constructor for country class, sets countrySelect, bio, transport, and sights variables
   public Country(int country) {
      switch(country){
         case 0: System.out.println("Exiting..");
                 System.exit(0);
                 break;
         case 1: countrySelect = "Thailand";
                 break;
         case 2: countrySelect = "Japan";
                 break;
         case 3: countrySelect = "Switzerland";
                 break;
         case 4: countrySelect = "Mexico";
                 break;
         case 5: countrySelect = "Austria";
                 break;
         case 6: countrySelect = "Denmark";
                 break;
         case 7: countrySelect = "United Kingdom";
                 break;
      }
      
      //switch takes countrySelect variable and sets bio, sights, and transport
      switch(countrySelect){
         case "Thailand": 
             bio = "About Thailand:\n Thailand, historically known as Siam and officially the Kingdom of Thailand, is a country in Southeast Asia,\n located at the center of the Indochinese Peninsula, spanning 513,120 square kilometers (198,120 sq mi), with a population of almost 70 million.\n The country is bordered to the north by Myanmar and Laos, to the east by Laos and Cambodia, to the south by the Gulf of Thailand and Malaysia, and to the west by the Andaman Sea and the extremity of Myanmar.\n Thailand also shares maritime borders with Vietnam to the southeast, and Indonesia and India to the southwest.\n Bangkok is the nation's capital and largest city.\n";
             sights = "Sights in Thailand:\n 1. Railay Beach\n 2. Koh Phi Phi\n 3. The Grand Palace, Bangkok\n 4. Sunday Walking Street, Chiang Mai\n 5. Pai\n";
             transport = "Traveling in Thailand:\n You can take a ferry across the gulf of Thailand,\n a longtail boat from island to island,\n or a motorcycle with a carriage known as a tuk-tuk";
             break;
         case "Japan": 
             bio = "About Japan:\n Japan is an island country in East Asia. It is situated in the northwest Pacific Ocean and is bordered on the west by the Sea of Japan,\n while extending from the Sea of Okhotsk in the north toward the East China Sea, Philippine Sea, and Taiwan in the south.\n Japan is a part of the Ring of Fire and spans an archipelago of 6852 islands covering 377,975 square kilometers (145,937 sq mi);\n the five main islands are Hokkaido, Honshu (the mainland), Shikoku, Kyushu, and Okinawa.\n Tokyo is the nation's capital and largest city, followed by Yokohama, Osaka, Nagoya, Sapporo, Fukuoka, Kobe, and Kyoto.\n Japan is the eleventh most populous country in the world, as well as one of the most densely populated and urbanized.\n";
             sights = "Sights in Japan:\n 1. Mount Fuji\n 2. Imperial Tokyo\n 3. Hiroshima Peace Memorial Park\n 4. Historic Kyoto\n 5. The Island Shrine of Itsukushima, Miyajima\n";
             transport = "Traveling in Japan:\n Railways are the country's main method of passenger transport between major cities and metropolitan areas.\n Shinkansen, or bullet trains, are also an option, reaching speeds up to 200mph.";
             break;
         case "Switzerland": 
             bio = "About Switzerland:\n Switzerland, officially the Swiss Confederation, is a landlocked country located at the confluence of Western, Central and Southern Europe.\n It is a federal republic composed of 26 cantons, with federal authorities based in Bern.\n Switzerland is bordered by Italy to the south, France to the west, Germany to the north and Austria and Liechtenstein to the east.\n It is geographically divided among the Swiss Plateau, the Alps and the Jura, spanning 41,285 km2 (15,940 sq mi) with land area comprising 39,997 km2 (15,443 sq mi).\n The Alps occupy the greater part of the territory.\n The Swiss population of approximately 8.7 million is concentrated mostly on the plateau, where the largest cities and economic centers are located, including Zürich, Geneva and Basel.\n These three cities are home to the headquarters or offices of international organizations such as the WTO, the WHO, the ILO, FIFA, and the United Nations's second-largest office.\n";
             sights = "Sights in Switzerland:\n 1. Matterhorn\n 2. Chateau de Chillon\n 3. Jungfraujoch\n 4. Chapel Bridge\n 5. Bernina Express\n";
             transport = "Traveling in Switzerland:\n Switzerland can be traveled by car,\n but you can get anywhere with a bus, train, or taxi.\n There are even cities, such as Zermatt, that have no cars whatsoever.";
             break;
         case "Mexico": 
             bio = "About Mexico:\n Mexico, officially the United Mexican States, is a country in the southern portion of North America.\n It is bordered to the north by the United States; to the south and west by the Pacific Ocean;\n to the southeast by Guatemala, Belize, and the Caribbean Sea; and to the east by the Gulf of Mexico.\n Mexico covers 1,972,550 square kilometers (761,610 sq mi), making it the world's 13th-largest country by area;\n with approximately 126,014,024 inhabitants, it is the 10th-most-populous country and has the most Spanish-speakers.\n Mexico is organized as a federal republic comprising 31 states and Mexico City, its capital.\n Other major urban areas include Monterrey, Guadalajara, Puebla, Toluca, Tijuana, Ciudad Juárez, and León.\n";
             sights = "Sights in Mexico:\n 1. Chichen Itza\n 2. Tulum\n 3. Teotihuacan\n 4. Puerto Vallarta\n 5. Mexico City\n";
             transport = "Traveling in Mexico:\n Mexico travelers tend to rely on buses, which are known as camiones, or boat if visiting the coast.\n Mexico also has 50 airports, while competition keeps the prices affordable between them.";
             break;
         case "Austria": 
             bio = "About Austria:\n The Republic of Austria, commonly just Austria, is a country in the southern part of Central Europe, lying in the Eastern Alps.\n It is a federation of nine states, one of which is the capital, Vienna, the most populous city and state.\n A landlocked country, Austria is bordered by Germany to the northwest, the Czech Republic to the north, Slovakia to the northeast, Hungary to the east, Slovenia and Italy to the south, and Switzerland and Liechtenstein to the west.\n The country occupies an area of 83,871 km2 (32,383 sq mi) and has a population of 9 million.\n";
             sights = "Sights in Austria:\n 1. Vienna\n 2. Salzburg\n 3. Tirol Province\n 4. Graz\n 5. Historic Innsbruck\n";
             transport = "Traveling in Austria:\n Austria has a strong public transit system in cities with buses and tramways.\n It's not uncommon to travel by bicycle as well.\n Only the capital Vienna has a metro.";
             break;
         case "Denmark": 
             bio = "About Denmark:\n Denmark is a Nordic country in Northern Europe.\n It is the most populous and politically central constituent of the Kingdom of Denmark, a constitutionally unitary state that includes\n the autonomous territories of the Faroe Islands and Greenland in the North Atlantic Ocean.\n European Denmark is the southernmost of the Scandinavian countries, lying southwest of Sweden, south of Norway, and north of Germany.\n Spanning a total area of 42,943 km2 (16,580 sq mi), it consists of the peninsula of Jutland and an archipelago of 443 named islands,\n of which the largest are Zealand, Funen and the North Jutlandic Island.\n";
             sights = "Sights in Denmark:\n 1. Tivoli Gardens, Copenhagen\n 2. Christiansborg Palace, Copenhagen\n 3. National Museum of Denmark (Nationalmuseet), Copenhagen\n 4. The Open-Air Museum (Frilandsmuseet), Lyngby\n 5. The National Gallery of Denmark (Statens Museum for Kunst), Copenhagen\n";
             transport = "Traveling in Denmark:\n In Copenhagen, there are many options, such as metros, trains, and buses.\n It is also well-known that people love their bicycles here.\n It could be fun to get some exercise while sight-seeing!";
             break;
         case "United Kingdom": 
             bio = "About the UK:\n The United Kingdom of Great Britain and Northern Ireland, commonly known as the United Kingdom (UK) or Britain,\n is a country in Europe, off the north-western coast of the continental mainland.\n It comprises England, Scotland, Wales and Northern Ireland.\n The United Kingdom includes the island of Great Britain, the north-eastern part of the island of Ireland, and many smaller islands within the British Isles.\n Northern Ireland shares a land border with the Republic of Ireland; otherwise, the United Kingdom is surrounded by the Atlantic Ocean, the North Sea, the English Channel, the Celtic Sea and the Irish Sea.\n The total area of the United Kingdom is 242,495 square kilometers (93,628 sq mi), with an estimated 2020 population of more than 67 million people.\n";
             sights = "Sights in the UK:\n 1. London: The UK's All-in-One Destination\n 2. Edinburgh: Scotland's Capital\n 3. Roman-Era Bath\n 4. Ancient Stonehenge and Medieval Salisbury\n 5. Royal Windsor\n";
             transport = "Traveling in the UK:\n Trains are the most popular form of public transportation.\n The railway network, operated by National Rail, covers England, Scotland, and Wales.\n You also have the option for buses and flights.";
             break;
      }
   }
   
   //accessors
   public String getTransport() {
      return transport;
   }
   
   public String getSights() {
      return sights;
   }
   
   public String getBio(){
      return bio;
   }

   public String getCountry() {
      return countrySelect;
   }
}