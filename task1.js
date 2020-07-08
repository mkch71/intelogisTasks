"use strict";
function array_flip(arr){

  let result = {};

  if (Array.isArray(arr)){
    arr.forEach((value,key)=>{
      console.log(value,key);
      result[value]=key;
    });

  } else if (typeof arr === 'object'){
    Object.keys(arr).forEach((value,key)=>{
      result[arr[value]]=value;
    });

  }

  return result;

}