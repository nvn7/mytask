import { Component } from '@angular/core';

@Component({
  selector: 'app-textcom',
  template: `
  <input type="text" [(ngModel)]="nam">
  `,
  styleUrls: ['./textcom.component.css']
})
export class TextcomComponent {
  
}
