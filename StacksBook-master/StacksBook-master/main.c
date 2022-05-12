#include <stdio.h>
#include <stdlib.h>
#include <windows.h>
#include <conio.h>

COORD coord={0,0};

int cur=1;
char ch;

void gotoxy(int x,int y)
{
    coord.X=x;
    coord.Y=y;
    SetConsoleCursorPosition(GetStdHandle(STD_OUTPUT_HANDLE),coord);
}

int frame()
{
    printf("\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDBSTACKS PROGRAM'S BOOK\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\n");
    printf("\xDB                                                              \xDB\n");
    printf("\xDB                                                              \xDB\n");
    printf("\xDB                                                              \xDB\n");
    printf("\xDB                                                              \xDB\n");
    printf("\xDB                                                              \xDB\n");
    printf("\xDB                                                              \xDB\n");
    printf("\xDB                                                              \xDB\n");
    printf("\xDB                                                              \xDB\n");
    printf("\xDB                                                              \xDB\n");
    printf("\xDB                                                              \xDB\n");
    printf("\xDB                                                              \xDB\n");
    printf("\xDB                                                              \xDB\n");
    printf("\xDB                                                              \xDB\n");
    printf("\xDB                                                              \xDB\n");
    printf("\xDB                                                              \xDB\n");
    printf("\xDB                                                              \xDB\n");
    printf("\xDB                                                              \xDB\n");
    printf("\xDB                                                              \xDB\n");
    printf("\xDB                                                              \xDB\n");
    printf("\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\xDB\n");

}

int choice()
{
    system("cls");
    system("color 3e");
    switch(cur)
    {
    case 1:
        system("hello.exe");
        printf("\n1 for execute this program or any key for main menu\n");
        if (getch()=='1')
        {
            system("cls");
            system("helloO.exe");
        }
        getch();
        break;
    case 2:
        system("sumt.exe");
        printf("\n1 for execute this program or any key for main menu");
        if (getch()=='1')
        {
            system("cls");
            system("sum.exe");
        }
        getch();
        break;
    case 3:
        system("subt.exe");
        printf("\n1 for execute this program or any key for main menu");
        if (getch()=='1')
        {
            system("cls");
            system("subO.exe");
        }
        getch();
        break;
    case 4:
        system("mul.exe");
        printf("\n1 for execute this program or any key for main menu");
        if (getch()=='1')
        {
            system("cls");
            system("mulO.exe");
        }
        getch();
        break;
    case 5:
        system("div.exe");
        printf("\n1 for execute this program or any key for main menu");
        if (getch()=='1')
        {
            system("cls");
            system("divO.exe");
        }
        getch();
        break;
    case 6:
        system("cac.exe");
        printf("\n1 for execute this program or any key for main menu");
        if (getch()=='1')
        {
            system("cls");
            system("cacO.exe");
        }
        getch();
        break;
    case 7:
        system("greaterthan.exe");
        printf("\n1 for execute this program or any key for main menu");
        if (getch()=='1')
        {
            system("cls");
            system("greaterthanO.exe");
        }
        getch();
        break;
    case 8:
        system("oddeven.exe");
        printf("\n1 for execute this program or any key for main menu");
        if (getch()=='1')
        {
            system("cls");
            system("oddevenO.exe");
        }
        getch();
        break;
    case 9:
        system("swa.exe");
        printf("\n1 for execute this program or any key for main menu");
        if (getch()=='1')
        {
            system("cls");
            system("swaO.exe");
        }
        getch();
        break;
    case 10:
        system("posneg.exe");
        printf("\n1 for execute this program or any key for main menu");
        if (getch()=='1')
        {
            system("cls");
            system("posnegO.exe");
        }
        getch();
        break;
    case 11:
        system("fact.exe");
        printf("\n1 for execute this program or any key for main menu");
        if (getch()=='1')
        {
            system("cls");
            system("factO.exe");
        }
        getch();
        break;
    case 12:
        system("odd1t10.exe");
        printf("\n1 for execute this program or any key for main menu");
        if (getch()=='1')
        {
            system("cls");
            system("odd1t10O.exe");
        }
        getch();
        break;
    case 13:
        system("even1t10.exe");
        printf("\n1 for execute this program or any key for main menu");
        if (getch()=='1')
        {
            system("cls");
            system("even1t10O.exe");
        }
        getch();
        break;
    case 14:
        system("prime.exe");
        printf("\n1 for execute this program or any key for main menu");
        if (getch()=='1')
        {
            system("cls");
            system("primeO.exe");
        }
        getch();
        break;
    case 15:
        printf("\n Exit");
        exit(0);
        break;
    }
    cur=1;
    mainmenu();
}

int cursor()
{
    switch(cur)
    {
    case 1:
        gotoxy(2,4);
        printf("\xDB-> Hello World  ");
        break;
    case 2:
        gotoxy(2,5);
        printf("\xDB-> sum     ");
        break;
    case 3:
        gotoxy(2,6);
        printf("\xDB-> subtraction    ");
        break;
    case 4:
        gotoxy(2,7);
        printf("\xDB-> multiply     ");
        break;
    case 5:
        gotoxy(2,8);
             printf("\xDB-> divide     ");
        break;
    case 6:
        gotoxy(2,9);
             printf("\xDB-> calculator     ");
        break;
    case 7:
        gotoxy(2,10);
             printf("\xDB-> Find greater value     ");
        break;
    case 8:
        gotoxy(2,11);
             printf("\xDB-> Find Odd or Even    ");
        break;
    case 9:
        gotoxy(2,12);
             printf("\xDB-> Swaping     ");
        break;
    case 10:
        gotoxy(2,13);
             printf("\xDB-> Find Positive and Nagetive     ");
        break;
    case 11:
        gotoxy(2,14);
             printf("\xDB-> Factorial    ");
        break;
    case 12:
        gotoxy(2,15);
             printf("\xDB-> Print all ODD value 1-100    ");
        break;
    case 13:
        gotoxy(2,16);
             printf("\xDB-> Print all EVEN value 1-100    ");
        break;
    case 14:
        gotoxy(2,17);
             printf("\xDB-> Prime No    ");
        break;
    case 15:
        gotoxy(2,18);
             printf("\xDB-> Exit    ");
        break;
    }
}

int mainmenu()
{
    system("color 5e");
    system("cls");
    frame();
    while(1)
    {
            gotoxy(2,4);
            printf("Hello World    ");
            gotoxy(2,5);
             printf("sum     ");
             gotoxy(2,6);
             printf("subtraction    ");
             gotoxy(2,7);
             printf("multiply     ");
             gotoxy(2,8);
             printf("divide     ");
             gotoxy(2,9);
             printf("calculator     ");
             gotoxy(2,10);
             printf("Find greater value     ");
             gotoxy(2,11);
             printf("Find Odd or Even    ");
             gotoxy(2,12);
             printf("Swaping     ");
             gotoxy(2,13);
             printf("Find Positive and Nagetive     ");
             gotoxy(2,14);
             printf("Factorial    ");
             gotoxy(2,15);
             printf("Print all ODD value 1-10     ");
             gotoxy(2,16);
             printf("Print all EVEN value 1-10     ");
             gotoxy(2,17);
             printf("Prime No    ");
             gotoxy(2,18);
             printf("Exit    ");
             cursor();
             ch=getch();
                 if(ch==72)
                    {
                        if(cur==1)cur=15;
                        else cur-=1;
                    }
                if(ch==80)
                    {
                        if(cur==15)cur=1;
                        else cur+=1;
                    }
                if(ch==13)
                        choice();
    }
}

int main()
{
    mainmenu();
    return 0;
}
