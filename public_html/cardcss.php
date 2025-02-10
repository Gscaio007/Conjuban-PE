
.articles {
  padding: 60px;
  background-color: #fafafa;
}

.article__grid {
  display: grid;
  grid-template-columns: 1fr;
  gap: 1.875rem;
}

@media (min-width: 30em) {
  
  .article__grid {
 
    grid-template-columns: initial;
  }
}
@media (min-width: 40em) {
  .article__grid {

    grid-template-columns: repeat(2, 1fr);
  }
}
@media (min-width: 64em) {
  .article__grid {

    grid-template-columns: repeat(4, 1fr);
  }
}
.article__item {
  border-radius: 0.3125rem;
  overflow: hidden;
  background-color: white;
  box-shadow: 0px 3px 12px rgba(0, 0, 0, 0.15);
  transition: all 150ms ease-in-out;
}
.article__item:hover {
  transform: scale(1.05);
}
.article__image {
  height: 12.5rem;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}
.article__text {
  padding: 1.875rem 1.875rem 2.5rem 1.875rem;
  color: #9698a6;
}
@media (min-width: 40em) {
  .article__text {
    padding: 1.875rem 1.5625rem;
  }
}
.article__author {
  font-size: 0.625rem;
  margin-bottom: 0.75rem;
}
.article__title {
  font-size: 1.0625rem;
  line-height: 1.2;
  color: #2d314d;
  margin-bottom: 0.5rem;
}
.article__description {
  font-size: 0.8125rem;
}



.button {
  background-color: #40c7c9;
  border: none;
  color: white;
  padding: 6px 12px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}


@media only screen and (max-width: 600px) {
  .nav-content {
    display: none;
  }
  
  #mobilecard{
    padding:10px!important;
}