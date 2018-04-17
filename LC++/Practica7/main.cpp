#include <iostream>
#include <Cuenta.h>
#include <string>

using namespace std;

int main()
{
/**
    int opc;
    int noCuenta;
    string nombre;
    float saldo;

    cout<<"Se creara una cuenta. Favor de llenar la siguinte informacion: "<<endl;
    cout<<"No de cuenta: "; cin>>noCuenta;
    cin.ignore();
    cout<<"\nTitular: "; getline(cin, nombre);
    cout<<"\nSaldo: "; cin>>saldo;
    Cuenta cuenta1(noCuenta, nombre, saldo);

    cout<<"     Informacion general"<<endl;
    cout<<"No de cuenta: "<<cuenta1.getId()<<endl;
    cout<<"Titular: "<<cuenta1.getTitular()<<endl;
    cout<<"Saldo: "<<cuenta1.getSaldo()<<endl;

    cout<<"Desea realizar el retiro?"<<endl; cin>>opc;
    if(opc == 1){
        float monto;
        cout<<"Introduzca el monto: "; cin>>monto;
        cuenta1.retiro(monto);
    }else{
        cout<<"Vuelva pronto"<<endl;
    }


    cout<<"\nDesea realizar un deposito?"<<endl; cin>>opc;
    if(opc == 1){
        float monto;
        cout<<"Introduzca el monto: "; cin>>monto;
        cuenta1.deposito(monto);
    }else{
        cout<<"\nDeposito exitoso. Vuelva pronto"<<endl;
    }

    cout<<"\nDesea realizar el retiro?"<<endl; cin>>opc;
    if(opc == 1){
        int monto;
        cout<<"Introduzca el monto: "; cin>>monto;
        cuenta1.retiro(monto);
    }else{
        cout<<"\nVuelva pronto"<<endl;
    }

    cout<<"\nEl saldo final de la cuenta es: "<<cuenta1.getSaldo()<<endl;
*/
    int opc ;
    Cuenta cuenta1(1, Cliente("Saul Torres", "Su direccion", "Su RFC"), 5000);
    Cuenta cuenta2(2, Cliente("jose Julio Mancha Hdz", "Mi direccion", "Mi RFC"), 5000);

    cuenta1.verInformacion();
    cout<<endl;
    cuenta2.verInformacion();

    cout<<endl;
    cout<<"Desea realizar el retiro?"<<endl; cin>>opc;
    if(opc == 1){
        float monto;
        cout<<"Introduzca el monto: "; cin>>monto;
        cuenta1.retiro(monto);
    }else{
        cout<<"Vuelva pronto"<<endl;
    }

    cout<<"\nDesea realizar un deposito?"<<endl; cin>>opc;
    if(opc == 1){
        float monto;
        cout<<"Introduzca el monto: "; cin>>monto;
        cuenta1.deposito(monto);
    }else{
        cout<<"\nDeposito exitoso. Vuelva pronto"<<endl;
    }

    cout<<"\nEl saldo final de la cuenta 1 es: "<<cuenta1.getSaldo()<<endl;

    cout<<endl;
    cout<<"Desea realizar el retiro?"<<endl; cin>>opc;
    if(opc == 1){
        float monto;
        cout<<"Introduzca el monto: "; cin>>monto;
        cuenta2.retiro(monto);
    }else{
        cout<<"Vuelva pronto"<<endl;
    }

    cout<<"\nDesea realizar un deposito?"<<endl; cin>>opc;
    if(opc == 1){
        float monto;
        cout<<"Introduzca el monto: "; cin>>monto;
        cuenta2.deposito(monto);
    }else{
        cout<<"\nDeposito exitoso. Vuelva pronto"<<endl;
    }

    cout<<"\nEl saldo final de la cuenta 2 es: "<<cuenta2.getSaldo()<<endl;
}
