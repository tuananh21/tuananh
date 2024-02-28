#include <stdio.h>
#include <math.h>
int main() {
	float a,b,c;
	printf("Nhap vao so a: ");
	scanf("%f", &a);
	printf("Nhap vao so b: ");
	scanf("%f", &b);
	printf("Nhap vao so c: ");
	scanf("%f", &c);
	if(a==0){
		if(b==0){
			if(c==0)
				printf("Phuong trinh vo so nghiem ");
			else 
				printf("Phuong trinh vo nghiem ");
		}	
		else {
			printf("Phuong trinh co 1 nghiem: %f", -c/b);
		}
	}
	else{
		float d;
		d=pow(b,2)-4*a*c;
		if(d<0){
			printf("Phuong trinh vo nghiem");
		}
		else if(d==0){
			printf("Phuong trinh co 1 nghiem: %f", -b/2*a);
		}
			else {
				printf("Phuong trinh co 2 nghiem phan biet: %f,%f",(-b+sqrt(d))/2*a,(-b-sqrt(d))/2*a);
			}	
	}
	
}
