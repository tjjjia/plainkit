import { greetR, messageR } from "./ruben.js";
import { greetM, messageM } from "./michael.js";

const greetRuben = greetR("Ruben");
const greetMichael = greetM("Michael");

console.log(greetRuben);
console.log(greetMichael);
console.log(messageR); // How you doing?
console.log(messageM); // How you doing?
