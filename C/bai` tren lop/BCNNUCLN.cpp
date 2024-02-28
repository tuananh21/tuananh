#include <stdio.h>
int main(){
	int a,b,i,gcd,lcm;
	printf("Nhap vao 2 nguyen: \n");
	scanf("%d %d", &a,&b);
	for(i=1;i<=a && i<=b;i++){
		if(a%i==0 && b%i==0)
		gcd=i;
	}
	printf("UCLN la: %d \n",gcd);
	
	lcm=(a>b)?a:b;
	while (1) {
        if ((lcm % a == 0) && (lcm % b == 0)) {
            printf("BCNN la: %d", lcm);
            break;
        }
        lcm++;
    }	
}
