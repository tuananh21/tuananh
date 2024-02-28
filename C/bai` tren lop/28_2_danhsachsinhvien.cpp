#include <stdio.h>
#include <string.h>
#include <stdlib.h>
struct SinhVien{
	char ten[50];
	int tuoi;
};
void nhapthongtin(struct SinhVien danhsach[],int n);

int main(){
	int n;
	printf("Nhap so luong sinh vien:");
	scanf("%d",&n);
	
	struct SinhVien *danhsach = (struct SinhVien*)malloc(n*sizeof(struct SinhVien));
	
	nhapthongtin(danhsach,n);
	
	//Sinh vien lon tuoi nhat
	int tuoilonnhat= danhsach[0].tuoi;
	int nguoilontuoinhat= 0;
	for(int i=1;i<n;i++){
		if(danhsach[i].tuoi > tuoilonnhat){
			tuoilonnhat = danhsach[i].tuoi;
			nguoilontuoinhat = i;
		}
	}
	
	printf("Sinh vien co tuoi lon nhat: \n");
	printf("Ten: %s \n",danhsach[nguoilontuoinhat].ten);
	printf("Tuoi: %d \n", tuoilonnhat);
	
	//Sinh vien co ten dai nhat
	int dodaiten = strlen(danhsach[0].ten);
	int nguoitendainhat = 0;
	for(int i=1;i<n;i++){
		if(strlen(danhsach[i].ten)>dodaiten){
			dodaiten = strlen(danhsach[i].ten);
			nguoitendainhat = i;
		}
	}
	
	printf("Sinh vien co ten dai nhat: \n");
	printf("Ten: %s \n",danhsach[nguoitendainhat].ten);
	printf("Tuoi: %d \n",&danhsach[nguoitendainhat].tuoi);
	
	//sinh vien co tuoi lon hon 20
	printf("Sinh vien co tuoi lon hon 20: \n");
	for(int i=0;i<n;i++){
		if(danhsach[i].tuoi > 20){
			printf("Ten: %s\n", danhsach[i].ten);
			printf("Tuoi: %d\n",danhsach[i].tuoi);
		}
	}
	
//	for(int i=0; i<n; i++){
//		printf("Nhap vao thong tin cua sinh vien %d: \n",i+1);
//		printf("Ten: ");
//		scanf("%s", danhsach[i].ten);
//		printf("Tuoi: ");
//		scanf("%d", &danhsach[i].tuoi);
//	}
}

void nhapthongtin(struct SinhVien danhsach[],int n){
	for(int i=0;i<n;i++){
		printf("Nhap thong tin cho sinh vien %d: \n",i+1);
		printf("Ten: ");
		scanf("%s", danhsach[i].ten);
		printf("Tuoi: ");
		scanf("%d", &danhsach[i].tuoi);
	}
}
