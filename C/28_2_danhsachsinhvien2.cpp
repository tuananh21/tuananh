#include <stdio.h>
#include <string.h>
#include <stdlib.h>
struct SinhVien{
	char ten[50];
	int tuoi;
};

void nhapthongtin(struct SinhVien danhsach[],int n){
	for(int i=0;i<n;i++){
		printf("Nhap thong tin cho sinh vien %d: \n",i+1);
		printf("Ten: ");
		gets(danhsach[i].ten);
		printf("Tuoi: ");
		scanf("%d", &danhsach[i].tuoi);
		getchar();
	}
}

void inSinhVientuoilonnhat(struct SinhVien *danhsach,int n){
	int tuoilonnhat = danhsach[0].tuoi;
	int nguoilontuoinhat = 0;
	for(int i=1;i<n;i++){
		if(danhsach[i].tuoi > tuoilonnhat){
			tuoilonnhat = danhsach[i].tuoi;
			nguoilontuoinhat = i;
		}
	}
	
	printf("Sinh vien co tuoi lon nhat: \n");
	printf("Ten: %s \n",danhsach[nguoilontuoinhat].ten);
	printf("Tuoi: %d \n", tuoilonnhat);
}

void inSinhVientendainhat(struct SinhVien *danhsach,int n){
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
}

void inSinhViencotuoihon20(struct SinhVien *danhsach,int n){
	printf("Sinh vien co tuoi lon hon 20: \n");
	for(int i=0;i<n;i++){
		if(danhsach[i].tuoi > 20){
			printf("Ten: %s\n", danhsach[i].ten);
			printf("Tuoi: %d\n",danhsach[i].tuoi);
		}
	}
}

void timSinhVientheotuoi(struct SinhVien *danhsach,int n,int m){
	int check = 0;
	for(int i=0;i<n;i++){
		if(m == danhsach[i].tuoi){
			printf("%s",danhsach[i].ten);
			check++;
		}
	}
	if(check == 0){
		printf("Khong co sinh vien nao \n");
	}
}

int main(){
	int n,m,luachon;
	printf("Nhap so luong sinh vien:");
	scanf("%d",&n);
	getchar();
	
	struct SinhVien *danhsach = (struct SinhVien*)malloc(n*sizeof(struct SinhVien));
	
	nhapthongtin(danhsach,n);
	
	do {
	printf("1.In ra sinh vien co tuoi lon nhat. \n");
	printf("2.In ra sinh vien co ten dai nhat. \n");
	printf("3.In ra danh sach sinh vien co tuoi lon hon 20. \n");
	printf("4.Tim kiem sinh vien theo tuoi. \n");
	printf("0.Ket thuc chuong trinh. \n");
	printf("Nhap lua chon cua ban: ");
	scanf("%d", &luachon);
	
	
	switch(luachon){
		case 1:
			inSinhVientuoilonnhat(danhsach,n);
			break;
		case 2:
			inSinhVientendainhat(danhsach,n);
			break;
		case 3:
			inSinhViencotuoihon20(danhsach,n);
			break;
		case 4:
			{
			printf("Nhap tuoi can tim: ");
			scanf("%d",&m);
			timSinhVientheotuoi(danhsach,n,m);
			}
			break;
		case 0:
			printf("Chuong trinh ket thuc.");
			break;
		default:
			printf("Lua chon khong hop le\n");
			break;	
	}
	}while (luachon != 0);	
}
