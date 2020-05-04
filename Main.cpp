#include <iostream>
#include <string>
#include <ctime>
#include <conio.h>
 
using namespace std;
 
void ulang() {
    cout << "-----------------------------------\n";
}
 
 
int main(int argc, char const *argv[])
{
    string uss, pass;
 
    login:
    cout << "masukan username : "; cin >> uss;
    cout << "masukan password : "; cin >> pass;
       
    if(uss == "admin" && pass == "icang") {
        system("cls");
        goto load;
    }
    else {return 0;}  
 
    load:
    for(int indeks = 0; indeks <= 100; indeks++) {
        cout << "loading..." << indeks  << " %";
        cout << endl;
        system("cls");
    }
        system("color 0A");
        pilih:
        time_t now = time(0);
        char* dt = ctime(&now);
        cout << "Time now : " << dt;
   
        // pilihan menu
        int pil;
       
        cout << "\nMau gak jadian sama icang ?\n";
             ulang();
        cout << "[1] untuk \"iya\"\n"
             << "[2] untuk \"tidak\"\n";
             ulang();
        cout << "Masukan pilihan Acaa : ";
             cin >> pil;
             system("cls");
             
    // penentuan pilihan
    if (pil == 1) {
            system("color 0A");
            int i,j;
         
                 for(i=1;i<=22;i++){
                 for(j=1;j<=60;j++){
                 if(i==1) if(((j>=14)&&(j<=23))||((j>=39)&&(j<=48))) cout<<"*"; else cout<<" ";
                 else if(i==2) if(((j>=11)&&(j<=26))||((j>=36)&&(j<=51))) cout<<"*"; else cout<<" ";
                 else if(i==3) if(((j>=9)&&(j<=28))||((j>=34)&&(j<=53))) cout<<"*"; else cout<<" ";
                 else if(i==4) if(((j>=7)&&(j<=30))||((j>=32)&&(j<=55))) cout<<"*"; else cout<<" ";
                 else if((i>=5)&&(i<=8)) if((j>=5)&&(j<=57)) cout<<"*"; else cout<<" ";
                 else if(i==9)  if((j>=7)&&(j<=55))  cout<<"*"; else cout<<" ";
                 else if(i==10) if((j>=9)&&(j<=53))  cout<<"*"; else cout<<" ";
                 else if(i==11) if((j>=11)&&(j<=51)) cout<<"*"; else cout<<" ";
                 else if(i==12) if((j>=13)&&(j<=49)) cout<<"*"; else cout<<" ";
                 else if(i==13) if((j>=15)&&(j<=47)) cout<<"*"; else cout<<" ";
                 else if(i==14) if((j>=17)&&(j<=45)) cout<<"*"; else cout<<" ";
                 else if(i==15) if((j>=19)&&(j<=43)) cout<<"*"; else cout<<" ";
                 else if(i==16) if((j>=21)&&(j<=41)) cout<<"*"; else cout<<" ";
                 else if(i==17) if((j>=23)&&(j<=39)) cout<<"*"; else cout<<" ";
                 else if(i==18) if((j>=25)&&(j<=37)) cout<<"*"; else cout<<" ";
                 else if(i==19) if((j>=27)&&(j<=35)) cout<<"*"; else cout<<" ";
                 else if(i==20) if((j>=29)&&(j<=33)) cout<<"*"; else cout<<" ";
                 else if(i==21) if((j>=30)&&(j<=32)) cout<<"*"; else cout<<" ";
                 else if(i==22) if(j==31) cout<<"*"; else cout<<" ";
              }
              cout<<"\n";
           }
           cout << "\nI LOVE YOU ACAAA :D\n";
           cout << "Thanks atas pilihan nya :)\n\n";
           
    }
        else if (pil == 2) {
            system("color 0A");
            cout << "Thanks acaa udah mau ngejawab hehe :)\n";
            cout << "-------------------------------------\n";
    }
     char piL;
           cout << "Tekan [y] untuk kembali ke pilihan\n"
                << "Tekan [t] untuk keluar program\n"
                << "[y/t]... ? "; cin >> piL;
               
                if (piL == 'y') {
                    system("cls");
                    goto pilih;
                }if (pil == 't') {
                    goto out;
            }
                out:
                    system("cls");
                    cout << "Good bye acaa :)\n";
                   
    cin.get();
return 0;
}
