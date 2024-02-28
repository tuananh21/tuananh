#include <stdio.h>
int main(){
	int n;
	printf("Nhap so phan tu cua mang:");
	scanf("%d", &n);
	int arr[n];
	int i,j;
	printf("Nhap vao cac so cua mang: \n");
	for(i=0;i<n;i++){
		scanf("%d",&arr[i]);
		}
	for (j=1; j<n; j++) {
    i =j - 1;
    int tmp = arr[j];
    while ( (i>=0) && (tmp > arr[i]) ) {
        arr[i+1] = arr[i];
        i--;
    }
    arr[i+1] = tmp;
	}
	for(i=0;i<n;i++){
	printf("%d ",arr[i]);
	}
	
	int a;
	int b=0;
	printf("\nNhap so can tim:");
	scanf("%d", &a);
	for(i=0;i<n;i++){
		if(a==arr[i])
		b++;
		}
	
	printf("Xuat hien %d lan", b);
}
