export const formatRunners = (runners) => {
  return runners.map((runner) => {
    const fullName = runner.person_given_name + " " + runner.person_family_name;

    return {
      ...runner,
      full_name: fullName,
    };
  });
};
