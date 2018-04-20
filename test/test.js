import test from 'ava';

let pika

test.before("starter",()=>{
    pika = "chu";
})

test("hello world",(t)=>{
    t.is(pika,"chu");
})

test("je suis sur que pika est chou",(t)=>{
    t.is(pika,"chou");
})