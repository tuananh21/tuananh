#include <stdio.h>
#include <math.h>
void bac_1(int a,int b);
void bac_2(int a,int b,int c);


int main(){
	printf("Chon loai phuong trinh: \n");
	printf("1.Phuong trinh bac 1\n");
	printf("2.Phuong trinh bac 2\n");
	
	int choice;
	printf("Hay nhap lua chon cua ban: ");
	scanf("%d",&choice);
	
	if(choice==1){
		int a, b;
        printf("Nhap he so a: ");
        scanf("%d", &a);
        printf("Nhap he so b: ");
        scanf("%d", &b);
        bac_1(a,b);
	} else if(choice==2){
		int a,b,c;
		printf("Nhap he so a: ");
        scanf("%d", &a);
        printf("Nhap he so b: ");
        scanf("%d", &b);
        printf("Nhap he so c: ");
        scanf("%d", &c);
        bac_2(a,b,c);
	}
}

void bac_1(int a,int b){
	if(a==0){
		if(b==0){
			printf("Phuong trinh co vo so nghiem");
		}
		else{
			printf("Phuong trinh vo nghiem");
		}
	}
	else{
		int x = -b/a;
		printf("Phuong trinh co nghiem la: %d",x);
	}
};

void bac_2(int a,int b,int c){
	int d = b*b - 4*a*c;
	if (d < 0) {
        printf("Phuong trinh vo nghiem\n");
	}else if (d == 0) {
        float x = -b / (2 * a);
        printf("Phuong trinh co nghiem kep: x = %f\n", x);
    } else {
        float x1 = (-b + sqrt(d)) / (2 * a);
        float x2 = (-b - sqrt(d)) / (2 * a);
        printf("Phuong trinh co hai nghiem phan biet: x1 = %f, x2 = %f\n", x1, x2);
    }
}
