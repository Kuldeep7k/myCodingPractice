package numbers17;

public class Numbers17 {

    public static void main(String[] args) {

        int[]arr={112,30,188,77,22,96};
        int max=arr[0];
        for(int i=0; i<arr.length; i++)
        {
        if (arr [i]>max){
        max=arr[i];
        
        }
        }
        System.out.println("Maximum Element:"+max);
    }
    
}
