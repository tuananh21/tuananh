#include <stdio.h>
#include <stdlib.h>
float crystalTienDien(int soKWh){
	float total;
	if(soKWh < 50){
		total = soKWh * 500 ;
	}else if(soKWh <= 100){
		total = 50*500 + (soKWh-50) * 700 ;
	}else {
		total = 50*500 + 50*700 + (soKWh-100) * 900;
	}
	return total;
}

int main(){
	int a=30;
	int b=80;
	int c=120;
	
	printf("Electricity bill for %d kWh is: %.0f dong \n",a,crystalTienDien(a));
	printf("Electricity bill for %d kWh is: %.0f dong \n ",b,crystalTienDien(b));
	printf("Electricity bill for %d kWh is: %.0f dong \n",c,crystalTienDien(c));
}
