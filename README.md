milestone1# my-pwp-project

## Milestone 1 Feedback
Nice job on defining your persona - you've put careful thought and consideration into the needs of this type of client. Although your direction for your PWP is clear, I think there may be room for you to define your overall PWP Purpose Audience, and Goal in even more detail. For instance, are you more interested in securing freelance work, or are employment opportunities more what you might be looking for? The answer to this questions, and others regarding the kind of opportunities you are interested in pursuing, could affect your design and content choices for this project. For instance, based on the persona you outlined, are you particularly interested in working with freelance clients in the food/bev/hospitality industry?

Looks like the Use Case you outlined here isn't for your PWP at all, but for a hypothetical project you might build for Jasmine. And no need for the Interaction Flow here, this does not apply to your PWP. Please see the Milestone 1 Documentation and Sample Milestones for reference:
- https://bootcamp-coders.cnm.edu/projects/personal/milestone-one/
- https://bootcamp-coders.cnm.edu/projects/personal/example/

What we're looking for here is an outline of how Jasmine, your hypothetical end user, will interact with your PWP. And it should be focused on her goals as a user, and yours as the project stakeholder. 

there are some technical issues with your HTML and your .gitignore file. See Edits &amp; Suggestions below. It may help to use an HTML validator such as https://validator.w3.org/ to check your code for errors.

Unfortunately I can only pass your Milestone 1 at [Tier I](https://bootcamp-coders.cnm.edu/projects/personal/rubric/) due to the Use Case not being correct. Update the Use Case and make the the changes listed below by Wednesday 7/26 8:00 a.m., and I'll bump your evaluation to Tier II.

### Edits &amp; Suggestions
- Missing `<!DOCTYPE html>`
- Take care to use proper indention in your HTML.
- Missing `alt` attribute on line 7
- `</body>` tag should be on line 53, not 17.
- remove the .gitignore file inside of `/documentation`. You only need the .gitignore at the root of the project.
- Add `.DS_Store` to .gitignore
- In .gitignore line 2 should be `/.idea`, and 3 should be `/vendor`. These need to be fixed.

### Updated Milestone 1 Feedback - 7/26/17
Nice work on the updated Use Case. Giving thought and consideration to how an end-user will use your site is a valuable exercise that can help guide your design and content strategy phase to come. 

Generally speaking, a potential contract client who is looking for a website for her small business would likely be looking for specific things on your site that potential employers within IT probably won't be... such as the services you provide and specialize in (do you do the kind of work she needs?), how to contact you for a consultation (is that a free consult, and what does that include?), etc. 

As a dedicated freelancer, you'd be more focused on making sales to a particular client base than meeting the requirements of a hiring manager or senior IT professional. This should have a definite impact on your content strategy and design phase going forward.

Nice job on nailing most of the technical issues too. Your .gitignore is still in the wrong place - it needs to be moved into the "project root" alongside the README and LICENSE. This is actually pretty important to ensure the correct files are ignored properly - so please make that change asap. Beware of spaces around your HTML attributes and values - see line 8. No spaces around the "=". And the Interaction looks like something you might create for a hypothetical project you would be creating _for Jasmine as your client_, and that isn't a part of this project.

Overall nice work on the changes, and I look forward to seeing your design choices in Milestone 2a. Your Milestone 1 passes at [Tier II](https://bootcamp-coders.cnm.edu/projects/personal/rubric/).

## Milestone 2&alpha; Feedback
This is better, and will provide you with a sufficient guide for your development phase ahead. If you plan on doing more front end work and/or needing to create wireframes for professional contracts, employers, or clients, I recommend practicing this process a bit more for a more professional and polished presentation. This is sufficient for a very basic student project, but not for a professional job.

Also, please make sure that you're committing and pushing regularly. The last commit I see on your project was 13 days ago, and this is a definite concern.

I see that your Portfolio section and About Me section are flipped on mobile vs. desktop. I'm not sure if this is intentional, or just a mistake. If it's intentional, you can build this using the built-in Bootstrap **push** and **pull** grid classes, but it might be tricky. I would probably consider this a "nice-to-have" feature... not totally critical, and potentially tricky. But some useful tips can be found here: https://getbootstrap.com/docs/3.3/css/#grid-column-ordering 

There are a few different ways you can selectively alter the navbar placement on desktop vs. mobile. One method might be to use jQuery. What I might consider doing is building the site with the navbar fixed at the bottom for mobile first, and once the screen is greater than a certain width, using jQuery to remove the class that sets the fixed placement. There is a `navbar-fixed-bottom` class in Bootstrap that you can use. You could also achieve the same thing using CSS - with a @media query.

You might want to have a look at the Bootstrap thumbnail component for your Portfolio items. https://getbootstrap.com/docs/3.3/components/#thumbnails

Your Milestone 2a passes at [Tier I](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). You are clear to begin development on your PWP. You'll want to build your PWP page in the following location: `public_html/index.php`, and the next Milestone will be a mid-development checkin. 

You'll want to make headway on this project ASAP, since you're behind schedule on this project. I would budget no less than an hour a day **minimum**  (preferably more), on PWP to get you caught up before Milestone 2b checkins next week. PWP is due 9/6/17, 3 weeks from today. Get as much built as you can, especially the contact form - I am planning to demo the PHP/Swiftmailer/JavaScript form functionality on Monday 8/28. 
