import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';

import { AppComponent } from './app.component';
import { SecondComponent } from './second/second.component';
import { IsComponent } from './second/is.component';
import { ThirdComponent } from './second/third.component';

@NgModule({
  declarations: [
    AppComponent,
    SecondComponent,
    IsComponent,
    ThirdComponent
  ],
  imports: [
    BrowserModule,
    FormsModule,
    HttpModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
