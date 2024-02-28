#include <stdio.h>
#include <string.h>

struct student {
	char name[20];
	int age;
	char address[50];
};

typedef struct student1 {
	char name[20];
	int age;
	char address[50];
}Student;
void printfStruct(struct student std);



int main(){
//	
//	char str1[10],str2[20],str3[20];
//	printf("Nhap vao chuoi str1: \n");
////	scanf("%s", str1);
//	gets(str1);
//	printf("Gia tri chuoi str1: %s\n", str1);
//	printf("Nhap vao chuoi str2: \n");
////	scanf("%s", str2);
//	gets(str2);
//	printf("Gia tri chuoi str2: %s\n", str2);
//	
//	//cat
//	strcat(str1,str2);
//	printf("Gia tri chuoi str1: %s\n", str1);
//	
//	//check
//	int check = strcmp(str1,str2);
//	printf("check: %d\n", check);
//	
//	//length
//	int length= strlen(str1);
//	printf("length: %d\n", length);
//	
//	//copy
//	strcpy(str3,str1);
//	printf("Gia tri chuoi str3: %s\n", str3);
//	
//	char *pos;
//	pos = strchr(str1,'a');
//	printf("Vi tri cua ki tu: %d",pos - str1);


	struct student std ={"T2401E", 20 ,"8 Ton That Thuyet"};
	printfStruct(std);
	struct student std1;
	std1 = std;
	printfStruct(std1);
	//pointer
	struct student *p;
	p=&std;
	printf("Name student: %s\n",p->name);
	
	Student std3 ={"T2401E", 20 ,"8 Ton That Thuyet"};
	printf("Name student: %s\n",std3.name);
	
}
	

void printfStruct(struct student std){
	printf("student name: %s, student age: %d, student address:%s\n",std.name,std.age,std.address);
}
