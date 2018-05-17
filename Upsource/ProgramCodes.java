import java.util.List;
import java.util.Scanner;
import java.util.Arrays;
import java.math.BigInteger;
import java.util.*;
import java.io.IOException;
import java.io.BufferedReader;
import java.io.InputStreamReader;

public class Solutions {
    public static void main(String[] args) {
    	Scanner kbd = new Scanner(System.in);
    	System.out.println("MENU: ");
    	System.out.println("1. Merged String Checker");
    	System.out.println("2. Pagination Helper");
    	System.out.println("3. Direction Reduction");
    	System.out.println("4. Scrambies");
    	System.out.println("5. Prime In Numbers");
    	System.out.println("6. Product Of Consecutive Fib Numbers");
    	System.out.println("7. Is My Friend Cheating");
    	System.out.println("8. The Clockwise Spiral");
    	System.out.println("9. Double Cola");
	System.out.println("10. Whats A Perfect Power Anyway");
	System.out.println("11. Gap In Primes");
	System.out.println("12. Perimeter Of Squares In A Recetangle");
	System.out.println("13. Josephus Survivor");
	System.out.println("14. Number Of Trailing Zeros Of N");

    	System.out.println("15. Quit");


		//Solutions MergedStringChecker = new Solutions();
		//Solutions PaginationHelper = new Solutions();
		//Solutions DirectionReduction = new Solutions();
		//Solutions PaginationHelper = new Solutions();
		//Solutions Scrambies = new Solutions();
		//Solutions PrimeInNumbers = new Solutions();
		//Solutions ProductOfConsecutiveFibNumbers = new Solutions();
		//Solutions IsMyFriendCheating = new Solutions();
		//Solutions TheClockwiseSpiral = new Solutions();
		//Solutions DoubleCola = new Solutions();
		//Solutions WhatsAPerfectPowerAnyway = new Solutions();
		//Solutions GapInPrimes = new Solutions();
		//Solutions PerimeterOfSquaresInARecetangle = new Solutions();
		//Solutions JosephusSurvivor = new Solutions();
		//Solutions NumberOfTrailingZerosOfN = new Solutions();

		int choice;
		boolean quit = true;
		do{
			System.out.print("Enter Your Choice: ");
			choice = kbd.nextInt();
			switch (choice){
				case 1:
				Solutions MergedStringChecker = new Solutions();
				break;
				case 2:
				Solutions PaginationHelper = new Solutions();
				break;
				case 3:
				Solutions DirectionReduction = new Solutions();
				break;
				case 4:
				Solutions Scrambies = new Solutions();
				break;
				case 5:
				Solutions PrimeInNumbers = new Solutions();
				break;
				case 6:
				Solutions ProductOfConsecutiveFibNumbers = new Solutions();
				break;
				case 7:
				Solutions IsMyFriendCheating = new Solutions();
				break;
				case 8:
				Solutions TheClockwiseSpiral = new Solutions();
				break;
				case 9:
				Solutions DoubleCola = new Solutions();
				break;
				case 10:
				Solutions WhatsAPerfectPowerAnyway = new Solutions();
				break;
				case 11:
				Solutions GapInPrimes = new Solutions();
				break;
				case 12:
				Solutions PerimeterOfSquaresInARcetangle = new Solutions();
				break;
				case 13:
				Solutions JosephusSurvivor = new Solutions();
				break;
				case 14:
				Solutions NumberOfTrailingZerosOfN = new Solutions();
				break;

				}
		}while(!quit);


	}


public class MergedStringCheck{

	public boolean isMerge(String s, String part1, String part2) {
		if (s.isEmpty()) {
			return part1.isEmpty() && part2.isEmpty();
    }

    if (part1.isEmpty() && part2.isEmpty()){
    	return false;
    }

    if (part1.length() == 0) {
    	return s.charAt(0) == part2.charAt(0) && isMerge(s.substring(1), part1, part2.substring(1));
    }

    if (part2.length() == 0) {
    	return s.charAt(0) == part1.charAt(0) && isMerge(s.substring(1), part1.substring(1), part2);
    }

    return (s.charAt(0) == part1.charAt(0) || s.charAt(0) == part2.charAt(0))
        && (
       isMerge(s.substring(1), part1.substring(1), part2)
            || isMerge(s.substring(1), part1, part2.substring(1)));
 }

}

public class PaginationHelper<I> {
    private final List<I> collection;
    private final int itemsPerPage;

    public PaginationHelper(List<I> collection, int itemsPerPage) {
        this.collection = collection;
        this.itemsPerPage = itemsPerPage;
   }

   public int itemCount() {
        return this.collection.size();
   }

    public int pageCount() {
        if (this.itemsPerPage == 0 || this.collection.size() == 0) {
            return 0;
        }

       return this.collection.size() / this.itemsPerPage + 1;
    }

    public int pageItemCount(int pageIndex) {
       if (pageIndex >= this.pageCount()) {
            return -1;
        }

       if (pageIndex < this.pageCount() - 1) {
          return this.itemsPerPage;
        }

        return this.collection.size() - this.itemsPerPage * pageIndex;
    }

    public int pageIndex(int itemIndex) {
        if (itemIndex >= this.collection.size() || itemIndex < 0) {
           return -1;
        }

        return itemIndex / this.itemsPerPage;
    }
}

public class DirectionReduction {
    public String[] dirReduc(String[]args) {
        // Your code here.
        String strDirc = "";

        for(int i = 0; i<args.length; i++){
            strDirc = strDirc+","+args[i];
            strDirc = strDirc.replace(",EAST,WEST", "")
            .replace(",WEST,EAST", "")
            .replace(",SOUTH,NORTH", "")
            .replace(",NORTH,SOUTH", "");

        }

        return strDirc.length()==0?new String[]{} : strDirc.substring(1).split(",");


    }
}







}
