#include <stdio.h>
#include <math.h>
int main(){
	int a;
	printf("\nNhap vao so nguyen a: ");
	scanf("%d", &a);
	if(a<2){
		printf("\n %d khong phai la so nguyen to");
	}
	int count=0;
	for(int i=2; i<=sqrt(a); i++){
		if(a % i== 0){
		count++;
		}
	}
	if(count==0){
		printf("\n %d la so nguyen to", a);
	}
	else{
		printf("\n %d khong phai la so nguyen to", a);
		}	
	}


