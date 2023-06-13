import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { CadastroFormComponent } from './cadastro-form/cadastro-form.component';
import { HomeComponent } from './home/home.component';
import { LoginFormComponent } from './login-form/login-form.component';

const routes: Routes = [
  { path: 'home', component: HomeComponent },
  { path: '', pathMatch: 'full', redirectTo: 'home' },
  { path: 'cadastroForm', component: CadastroFormComponent },
  { path: '', pathMatch: 'full', redirectTo: 'loginForm' },
  { path: 'loginForm', component: LoginFormComponent },
  { path: '', pathMatch: 'full', redirectTo: 'cadastroForm' }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
