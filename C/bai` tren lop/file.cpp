#include <stdio.h>
int main(){
	//doc file co san
	FILE *f;
	f = fopen("C:/Users/chutu/Downloads/Documents/T2401E/file.txt", "r");
	
	//doc tung ky tu
	char ch;
	do{
		ch = fgetc(f);
		printf("%c", ch);
	}while(ch != EOF);
	
	printf("\n");
	rewind(f);
	while (!feof(f)) {
		ch = fgetc(f);
		printf("%c", ch);
	}
	
	//doc 1 lan nhieu ky tu
	printf("\n");
	rewind(f);
	
	char string[50];
	while(fgets(string,50,f) != NULL){
		printf("%s", string);
	}
	fclose(f);
	
	
	//wirte
	FILE *wrf;
	wrf = fopen("C:/Users/chutu/Downloads/Documents/T2401E/test.txt","w+");
	char name[50]= "FPT Aptech";
	int age = 25;
	fprintf(wrf,"Name: %s \t Tuoi: %d",name,age);
	fclose(wrf);
	
	
}
