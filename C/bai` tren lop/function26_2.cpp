#include <stdio.h>
#include <stdlib.h>
void printValue(int a);
int sum(int a,int b);
// call by reference
void swap(int *a,int *b);

int func(int (*p)(int,int));
int compare (const void * a, const void * b);

int main(){
//	int a=10;
//	int b=30;
//	printValue(a);
//	printValue(sum(a,b));
//	printf("sau khi tinh toan: \n");
//	printValue(a);
//	printValue(b);
//	swap(&a,&b);
//	printf("sau khi swap: \n");
//	printValue(a);
//	printValue(b);
//	printValue(func(sum));
//	
//	int (*p)(int,int)=sum;
//	int c = func(sum);
//	printf("Gia tri tong 2 so: %d \n",sum(10,30));
//	printf("Gia tri tong 2 so: %d \n",p(a,b));
	int arr[5]={1,9,3,6,4};
	qsort (arr,5,sizeof(int),compare);
	for(int i=0;i<5;i++){
		printValue(arr[i]);
	}
}

void printValue(int a){
	printf("Gia tri cua so nguyen: %d\n",a);
}

int sum(int a,int b){
	a=a+10;
	b=b+10;
	printValue(a);
	printValue(b);
	return (a+b);
}

void swap(int *a,int *b){
	int temp;
	temp=*a;
	*a=*b;
	*b=temp;
}

int func(int (*p)(int,int)){
	int a=30;
	int b=40;
	return p(a,b);
}

int compare (const void * a, const void * b){
	return ( *(int*)a - *(int*)b );
}



