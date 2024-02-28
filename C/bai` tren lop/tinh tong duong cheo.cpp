#include <stdio.h>
int main() {
    int n;
    printf("Nhap so hang va so cot cua mang: ");
    scanf("%d", &n);

    int arr[n][n];
	int i,j;
	printf("Nhap vao cac so cua mang: \n");
    for(i=0;i<n;i++){
    	for(j=0;j<n;j++) {
		scanf("%d",&arr[i][j]);
		}
	}
	
    int a=0;
    for (int i=0;i<n;++i) {
        a+=arr[i][i];
    }
    printf("Tong cac so tren duong cheo: %d \n", a);
}
