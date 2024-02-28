#include <stdio.h>
#include <malloc.h>
int main(){
//	int *p;
//	int a=10;
//	p = &a;
//	a = 20;
//	*p = 30;
//	printf("Gia tri cua bien a: %d\n",a);
//	printf("Gia tri ma con tro dang tro toi: %d\n",*p);
//	printf("Dia chi cua bien a: %d\n",&a);
//	printf("Dia chi ma con tro dang tro toi: %d\n", p);
//	printf("Dia chi cua con tro p: %d\n",&p);
//	p++;
//	printf("Gia tri ma con tro dang tro toi: %d\n",*p);
//	p--;
//	printf("Gia tri ma con tro dang tro toi: %d\n",*p);
//	
//	
	// mang la 1 con tro
	int arr[4]={1,2,3,4};
	int *ct = arr;
	for (int i=0; i<4;i++){
		printf("%d ", *(ct+i));
	}
	printf("\n");
	for (int i=0; i<4;i++){
		printf("%d ", *(arr+i));
	}
	printf("\n");
	
	
	
	// malloc
	int *m;
	m = (int*)malloc(5*sizeof(int));
	for (int i=0;i<5;i++){
		printf("Nhap vao phan tu thu %d: \n", i+1);
		scanf("%d", m+i);
	}
	for (int i=0;i<5;i++){
		printf("%d ", *(m+i));
	}
	
	printf("\n");
	
//	//calloc
//	int *c;
//	c = (int*)calloc(5,sizeof(int));
//	for (int i=0;i<5;i++){
//		printf("%d ", *(c+i));
//	}
//	printf("\n");
//	for (int i=0;i<5;i++){
//		printf("Nhap vao phan tu thu %d: \n", i+1);
//		scanf("%d", c+i);
//	}
//	for (int i=0;i<5;i++){
//		printf("%d ", *(c+i));
//	}
	
	
	//realloc
	m = (int*)realloc(m,6*sizeof(int));
	printf("Nhap vao phan tu can them: ");
	scanf("%d", m+5);
	for (int i=0;i<6;i++){
		printf("%d ", *(m+i));
	}
}

