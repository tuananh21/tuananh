#include <stdio.h>
#include <string.h>
int main(){
//	//mang 1 chieu
//	int n;
//	printf("Nhap vao so phan tu cua mang: ");
//	scanf("%d", &n);
//	int arrInt[n];
//	//input data
//	for(int i=0;i<n;i++){
//		printf("index %d",i);
//		scanf("%d",arrInt[i]);
//	}
//	
//	//output data
//	for(int i=0;i<n;i++){
//		printf("%d",arrInt[i]);
//	}
	
	//mang 2 chieu
	int h,c;
	printf("Nhap vao so hang: ");
	scanf("%d",&h);
	printf("Nhap vao so cot: ");
	scanf("%d",&c);
	int arr2[h][c];
	for(int i=0;i<h;i++){
		for(int j=0;j<c;j++){
			printf("hang: %d, cot: %d",i,j);
			scanf("%d", &arr2[i][j]);
		}
	}
	
	//output
	for(int i=0;i<h;i++){
		for(int j=0;j<c;j++){
			scanf("%d", arr2[i][j]);
		}
	}
}



