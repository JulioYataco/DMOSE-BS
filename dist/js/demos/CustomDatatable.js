class CustomDatatable{
  constructor(config){
    this.config = config;
  }

  // Getter 
  get getConfig(){
    return this.config;
  }

  // Setter
  set setConfig(config){
    this.config = config;
  }
}

var customDatatable = new CustomDatatable({"text": "hola"});
console.log(customDatatable.getConfig);