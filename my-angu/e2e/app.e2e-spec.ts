import { MyAnguPage } from './app.po';

describe('my-angu App', function() {
  let page: MyAnguPage;

  beforeEach(() => {
    page = new MyAnguPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});
