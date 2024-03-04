#include <stdio.h>
int main(){
	int n;
	printf("Enter the number of element in the array: ");
	scanf("%d",&n);
	
	int arr[n];
	printf("Enter the elements of the array: \n");
	for(int i=0;i<n;i++){
		scanf("%d",&arr[i]);
	}
	
	int smallestpositive = -1;
	for(int i=0;i<n;i++){
		if(arr[i]>0 && (smallestpositive == -1 || arr[i]<smallestpositive)){
			smallestpositive = arr[i];
		}
	}
	
	if(smallestpositive == -1){
		printf("There is no positive number in the array.");
	}else {
		printf("The smallest positive number in the array is %d ",smallestpositive);
	}
	return 0;
}
