import csv
#company_format = "Company::create(['name' => \"{}\", 'rating' => {}, 'industry' => '{}', 'city' => '{}', 'skills' => '{}']);\n"
post_format = "JobPost::create(['title' => \"{}\", 'city' => '{}', 'link' => '{}', 'type' => '{}', 'skills' => '{}', 'degree' => '{}', 'company' => \"{}\", 'industry' => '{}', 'salary' => '{}', 'rating' => {}]);\n"
output = open('jobposts_outputFile.txt', 'w')
with open('JobData.csv') as csv_file:
    csv_reader = csv.reader(csv_file, delimiter=',')
    line_count = 0
    posts = list()
    for row in csv_reader:
        if line_count == 0:
            print(f'Column names are {", ".join(row)}')
            line_count += 1
        else:
            #companies
            #   skills = [member.replace(' ','_') for member in list(filter(None, row[11:]))]
            #   companies[row[8]] = (company_format.format(row[8], float(row[6]), row[9], row[1], ' '.join(skills)))
            skills = [member.replace(' ','_') for member in list(filter(None, row[11:]))]
            posts.append(post_format.format(row[3], row[1], row[4], row[5], ' '.join(skills), row[7], row[8], row[9], row[10], row[6]))
            line_count += 1
        if(line_count>500):
            break
    for post in posts:
        output.write(post)
output.close()
