#include <stdio.h>
#include <conio.h>
void sor(int arr[],int n);
int main()
{
int arr[100],n,i,j,temp;
printf("Enter the no of elements");
scanf("%d",&n);
printf("Enter the elements");
for (i=0; i<n; i++)
scanf("%d",&arr[i]);
sor(arr,n);
printf("Sorted array is :");
for (i=0; i<n; i++)
printf("\n %d",arr[i]);
getch();
}
void sor(int arr[],int n)
{
int i,j,temp;
for (i=0; i<n; i++)
{
for (j=i; j<n; j++)
{
if(arr[i]>arr[j])
{
temp=arr[i];
arr[i]=arr[j];
arr[j]=temp
}
}
}
}


