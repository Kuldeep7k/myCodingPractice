#include<iostream>
using namespace std;
void p()
{
	int var = 7;
	int *ptr;
	ptr = &var;
    cout << "Value at ptr = " << ptr << "\n";
	cout << "Value at var = " << var << "\n";
	cout << "Value at *ptr = " << *ptr << "\n";
}

int main()
{
	p();
}
