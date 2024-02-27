#include <stdio.h>
#include <stdlib.h>
#include <math.h>
int compare (const void * a, const void * b);
int mang(int arr[], int n);
int tongle(int arr[],int n);
int tongchan(int arr[],int n);
int songuyento(int n);
int tongnguyento(int arr[],int n);
int solanxuathien(int arr[],int n,int m);
int tongmang(int arr[], int n);

int main(){
	int n;
	printf("Co bao nhieu so trong mang: \n");
	scanf("%d",&n);
	int arr[n];
	mang(arr,n);
	
	printf("Sap xep cac so theo chieu giam dan: \n");
	qsort(arr,n,sizeof(int),compare);
		for(int j=0;j<n;j++){
		printf("%d ",arr[j]);
	}
	
	printf("\n");
	
	int tong_le = tongle(arr,n);
	printf("Tong cac so le trong mang: %d\n",tong_le);
	
	int tong_chan= tongchan(arr,n);
	printf("Tong cac so chan trong mang: %d\n",tong_chan);
	
	int tong_nguyen_to= tongnguyento(arr,n);
	printf("Tong cac so nguyen to trong mang: %d\n",tong_nguyen_to);
	
	int x;
	printf("Nhap vao so can tim: ");
	scanf("%d", &x);
	solanxuathien(arr,n,x);
	
	int tong_mang= tongmang(arr,n);
	printf("Tong cac so trong mang: %d",tong_mang);
}


int compare (const void * a, const void * b){
	return ( *(int*)b - *(int*)a );
}

int mang(int arr[], int n){
	printf("Nhap vao cac so trong mang: \n");
	for(int i=0;i<n;i++){
		scanf("%d",&arr[i]);
	}
}

int tongle(int arr[],int n){
	int a = 0;
	for(int i=0;i<n;i++){
		if (arr[i] % 2 !=0){
			a += arr[i];
		}
	}
	return a;
}

int tongchan(int arr[],int n){
	int a = 0;
	for(int i=0;i<n;i++){
		if (arr[i] % 2 ==0){
			a += arr[i];
		}
	}
	return a;
}

int songuyento(int n){
	if(n<2){
		return 0;
	}
 	for(int i = 2;i<=sqrt(n);i++ ){
 		if(n % i == 0){
 			return 0;
		}
	}
	return 1;
}

int tongnguyento(int arr[],int n){
	int tong_nguyen_to = 0;
    for (int i = 0; i < n; i++) {
        if (songuyento(arr[i])) {
            tong_nguyen_to += arr[i];
        }
    }
    return tong_nguyen_to;
}

int solanxuathien(int arr[],int n,int m){
	int y=0;
	for(int i=0;i<n;i++){
		if(m==arr[i])
		y++;
	}
	printf("So lan xuat hien cua so can tim la: %d\n",y);
}

int tongmang(int arr[], int n) {
    int tong = 0;
    for (int i = 0; i < n; i++) {
        tong += arr[i];
    }
    return tong;
}

