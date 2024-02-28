#include <stdio.h>
int main(){
//	//for
//	for(int i =0; i<10; i++){
//		if (i==5){
//			continue;
//		}
//		printf("value of i: %d \n", i);
//	}
//	
//	int count = 0;
//	while(true) {
//		//statment
//		printf("value of count: %d \n", count);
//		count++;
//		if (count==10){
//			break;
//		}
//	}
//	
//	int choice;
//	do {
//		printf("please input your choice 1-3: ");
//		scanf("%d", &choice);
//	}
//	while(choice <1 || choice>3);
//	printf("value of choice: %d", choice);


	printf("\n\n");
	int i=0,j=0;
	for(i=0;i<5;i++){
		for(j=0;j<=i;j++){
			printf("*");
		}
		printf("\n");
	}
}

