void main() {
  // var
  //Cara penggunaan : var <variable_name>;
  //Cara penggunaan : var <name> = <expression>;
//   var name = "Akmal Muhamad Firdaus";
//   var nim = 1301204188;
//   var isStudent = true;
//   if(isStudent){
//     print("Halo $name, kamu adalah student");
//   } else if(nim == 1301204188){
//     print("Halo $name, ternyata kamu adalah student");
//   } else {
//     print("Maaf $name, kamu bukan student");
//   }



    // var nilai = 'A';
    // switch (nilai) {
    // case 'A':
    //     // 1301204188 - Akmal Muhamad Firdaus
    //     print('Excellent');
    //     break;
    // case 'B':
    //     // 1301204188 - Akmal Muhamad Firdaus
    //     print('Good');
    //     break;
    // case 'C':
    //     // 1301204188 - Akmal Muhamad Firdaus
    //     print('Average');
    //     break;
    // case 'D':
    //     // 1301204188 - Akmal Muhamad Firdaus
    //     print('Below Average');
    //     break;
    // case 'E':
    //     // 1301204188 - Akmal Muhamad Firdaus
    //     print('Fail');
    //     break;
    // default:
    //     // 1301204188 - Akmal Muhamad Firdaus
    //     print('Invalid Grade');
    // }


    // ====== Looping ======
    // for (var i = 1; i <= 5; i++) {
    //     print("Cloningan akmal ke-$i");
    // }


    // var i = 1;
    // while (i <= 5) {
    //     print("Cloningan akmal ke-$i, menggunakan while");
    //     i++;
    // }



    // ====== List ======
    // var fixedList = List(3);
    // fixedList[0] = 'Akmal';
    // fixedList[1] = 'Muhamad';
    // fixedList[2] = 'Firdaus';


    // var names = ["Akmal", "delete", "Muhamad", "Firdaus"];
    // names.remove('delete');
    // for (var name in names) {
    //     print(name);
    // }

    // ====== Function ======
    print(factorial(6));
}


int factorial(number) {
  if (number <= 0) {
    // termination case
    return 1;
  } else {
    return (number * factorial(number - 1));
    // function invokes itself
  }
}