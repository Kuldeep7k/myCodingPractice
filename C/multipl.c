#include <stdio.h>
int main()
{
    int n, i;
    printf("Enter an number: ");
    scanf("%d",&n);
    printf("Multiplication of %d is: \n",n);
    for(i=1; i<=10; i++)
    {
        printf("%d * %d = %d \n",n, i, n*i);
    }
    getch();
}
