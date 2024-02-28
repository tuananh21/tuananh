#include <stdio.h>

int main() {
	int n,i;
	printf("Nhap so phan tu cua day: ");
	scanf("%d",&n);
	int a[n];
	for(i=1;i<=n;i++){
		printf("a[%d]: ",i);
		scanf("%d",&a[i]);
	}
//	printf("Day so ban dau: \n");
//	for(i=1;i<=n;i++)
//	printf("%d ", a[i]);
	
    int j;

    printf("\nIn ra day nguoc lai: \n");
    for(j=n; j>0;j--)
      printf("%d ", a[j]);
      
}
