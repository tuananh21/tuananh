#include <stdio.h>
int main(){
	int n,m;
	printf("Nhap vao so hang va so cot: \n");
	scanf("%d %d", &n, &m);
	int arr[n*m];
	int i,j;
	printf("Nhap vao cac so cua mang: \n");
	for(i=0;i<m*n;i++){
		scanf("%d",&arr[i]);
		}
	for (int i=0; i<n*m-1; i++){
   		for (int j=0; j<n*m-i-1; j++){
        	if (arr[j] > arr[j+1])
        {
           	int temp = arr[j];
           	arr[j] = arr[j+1];
           	arr[j+1] = temp;
        }
   	}
	}
	
	int ar[n][m];
	for(i=0;i<n*m;i++){
        ar[i/m][i%m] = arr[i];
    }
    
	for(i=0;i<n;i++)
   	{
       for(j=0;j<m;j++)
       {
           printf("%d ",ar[i][j]);
       }
       printf("\n");
   	}
   	printf("Gia tri nho nhat trong mang: %d \n",ar[0][0]);
   	printf("Gia tri lon nhat trong mang: %d",ar[n-1][m-1]);
}
	



