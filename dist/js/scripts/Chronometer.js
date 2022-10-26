class Chronometer{

  constructor(session){
    this.strTime = "00:00:00";
    this.sec = 0;
    this.min = 0;
    this.hrs = 0;
    this.t;
    this.session = session;

    if(this.session){
      if (sessionStorage.getItem("sec") !== null) {
        this.sec = parseInt(sessionStorage.getItem("sec"))
      } 
      
      if (sessionStorage.getItem("min") !== null) {
        this.min = parseInt(sessionStorage.getItem("min"))
      }
    
      if (sessionStorage.getItem("hrs") !== null) {
        this.hrs = parseInt(sessionStorage.getItem("hrs"))
      }
    }
  }

  
  tick(){
    this.sec++;
    if (this.sec >= 60) {
      this.sec = 0;
      this.min++;
      if (this.min >= 60) {
        this.min = 0;
        this.hrs++;
      }
    }
  
    if(this.session){
      sessionStorage.setItem("sec", String(this.sec))
      sessionStorage.setItem("min", String(this.min))
      sessionStorage.setItem("hrs", String(this.hrs))
    }

  }

  addTimer() {      
    this.tick();
    this.strTime = (this.hrs > 9 ? this.hrs : "0" + this.hrs)
    + ":" + (this.min > 9 ? this.min : "0" + this.min)
    + ":" + (this.sec > 9 ? this.sec : "0" + this.sec);
    this.start();
  }
  
  start() {
    this.reset();
    this.t = setTimeout(this.addTimer, 1000);
  }

  pause() {
    clearTimeout(this.t);
    return this.strTime;
  }

  continue() {
    this.t = setTimeout(this.addTimer(), 1000);
  }

  stop() {
    clearTimeout(this.t);
    if(this.session){
      sessionStorage.removeItem("sec")
      sessionStorage.removeItem("min")
      sessionStorage.removeItem("hrs")
    }
    return this.strTime;
  }

  reset() {
    this.strTime = "00:00:00";
    this.sec = 0; this.min = 0; this.hrs = 0;
  }
  
}

