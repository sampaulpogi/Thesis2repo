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




public class Scramblies {

    public boolean scramble(String str1, String str2) {

        // your code
        for(int i = 0; i<str2.length(); i++){
            if(!str1.contains(""+str2.charAt(i))){
                return false;
            }else{
                str1 = str1.replaceFirst(""+str2.charAt(i), "");
            }

        }

        return true;
    }
}


public class PrimeIneNumbers {

    public String factors(int lst) {
        String result = "";
        for (int fac = 2; fac <= lst; ++fac) {
            int count;
            for (count = 0; lst % fac == 0; ++count) {
                lst /= fac;
            }
            if (count > 0) {
                result += "(" + fac + (count > 1 ? "**" + count : "") + ")";
            }
        }
        return result;
    }
}



public class ProductOfConsecutiveFibNumbers { // must be public for codewars

  public long[] productFib(long prod) {
    // your code
    long x=0;
    long y=1;
    while(x*y<prod) {
      y = x+y;
      x = y-x;
    }
    if(x*y == prod) {
      return new long[] {x, y, 1};
    } else {
      return new long[] {x, y, 0};
    }
  }
}



public class IsMyFriendCheating {

    public List<long[]> removNb(long n) {
        LinkedList<long[]> pairs = new LinkedList<>();
        long sum = n * (n + 1) / 2;
        long lowerBound = ((n - 1) * n / 2) / (n + 1);
        long upperBound = (long) Math.sqrt(sum + 1) - 1;
        for (long a = upperBound; a >= lowerBound; a--) {
            long b = (sum - a)/(a + 1);
            if (a * b + a + b == sum) {
                pairs.addFirst(new long[]{a, b});
                pairs.addLast(new long[]{b, a});
            }
        }
        return pairs;
    }

}








}
