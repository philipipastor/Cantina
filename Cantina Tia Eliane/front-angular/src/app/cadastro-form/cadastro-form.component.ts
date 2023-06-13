import { Component, OnInit } from '@angular/core';
import { FormGroup } from '@angular/forms';

@Component({
  selector: 'app-cadastro-form',
  templateUrl: './cadastro-form.component.html',
  styleUrls: ['./cadastro-form.component.css']
})
export class CadastroFormComponent implements OnInit {
  
  usuario: any = {
    valorGasto: 0
  }; 

  constructor() { }
  
  onSubmit(form: any){
    console.log(this.usuario);
  }
  
  ngOnInit(): void {}
}
